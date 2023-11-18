<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    // ...

public function submitForm()
{
    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Guardar en la base de datos
    Contact::create([
        'name' => $this->name,
        'email' => $this->email,
        'message' => $this->message,
    ]);

    // Después de procesar el formulario, puedes emitir un evento
    $this->emit('contactSaved');

    // Después de procesar el formulario, puedes limpiar los campos
    $this->reset();
}

// ...

}
