<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Company;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $ids;
    public $email;
    public $removalid=null;
    public $website;
    public $category;
    public $address;
    public $location;
    public $status;
    public $sent;
    public $responded;
    public $phone;
    public $newsearch;
    protected $rules = [
        'name' => 'required|max:50',
        'email' => 'required|email',
        'website' => ['regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'category' => 'required|max:50',
        'location' => 'required|max:50',
        'address' => 'required|max:50',
        'sent' => 'max:50',
        'status' => 'max:50',
        'responded' => 'max:50',
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->website = null;
        $this->category = null;
        $this->address= null;
        $this->location=null;
        $this->phone=null;
        $this->ids=null;
        $this->sent=null;
        $this->status=null;
        $this->responded=null;
    }
    public function submit()
    {
        $validatedData = $this->validate();
        Company::create($validatedData);
        session()->flash('message', 'Company successfully added.');
        $this->resetInput();
        $this->emit('postAdded');
    }
    public function edit($id){
        $company=Company::where('id',$id)->first();
        $this->ids=$company->id;
        $this->name=$company->name;
        $this->email=$company->email;
        $this->website=$company->website;
        $this->category=$company->category;
        $this->address=$company->address;
        $this->location=$company->location;
        $this->phone=$company->phone;
        $this->sent=$company->sent;
        $this->status=$company->status;
        $this->responded=$company->responded;
    }
    public function update(){
       $validatedData= $this->validate();
        if ($this->ids) {
            $company=Company::find($this->ids);
            $company->update( $validatedData);
        }
        session()->flash('message', 'Company successfully updated.');
        $this->resetInput();
        $this->emit('companyUpdated');
          
    }
    public function deletemodal($id){
        $this->removalid=$id;
    $this->dispatchBrowserEvent('modalshow');
    }
    public function delete(){
        $company=Company::find($this->removalid)->delete();
        session()->flash('message', 'Company successfully deleted.');
        $this->dispatchBrowserEvent('demoved',['message'=>'company removed successfuly']);
    }

    public function render()
    {
            # code...
            return view('livewire.home', [

                'detail' => Company::where('name', 'like', '%' . $this->newsearch . '%')->paginate(5),
            ]);

    }
}
