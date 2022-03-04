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
    public $email;
    public $website;
    public $category;
    public $address;
    public $location;
    public $phone;
    public $newsearch;
    protected $rules = [
        'name' => 'required|max:25',
        'email' => 'required|email',
        'website' => ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'category' => 'required|max:15',
        'location' => 'required|max:15',
        'address' => 'required|max:20',
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->website = null;
        $this->category = null;
        $this->address= null;
        $this->location=null;
        $this->phone=null;
    }
    public function submit()
    {
        $validatedData = $this->validate();
        Company::create([
            'name' => $this->name,
            'email' => $this->email,
            'website' => $this->website,
            'category' => $this->category,
            'address' => $this->address,
            'location' => $this->location,
            'phone' => $this->phone
        ]);
        session()->flash('message', 'Post successfully updated.');
        $this->resetInput();
    }

    public function render()
    {
            # code...
            return view('livewire.home', [

                'detail' => Company::where('name', 'like', '%' . $this->newsearch . '%')->paginate(5),
            ]);

    }
}
