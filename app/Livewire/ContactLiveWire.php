<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

use Livewire\Attributes\Validate;


use Filament\Notifications\Notification;


class ContactLiveWire extends Component implements HasActions, HasForms
{

    use InteractsWithActions, InteractsWithForms;

    #[Validate('required')]
    public $first_name, $last_name, $phone, $content;


    public function save()
    {

        $this->validate();


        // $contact = Contact::create([
        //     'first_name' => $this->first_name,
        //     'last_name' => $this->last_name,
        //     'phone' => $this->phone,
        //     'content' => $this->content
        // ]);


        $contact = Contact::create($this->all());


        Notification::make()
        ->title(__('messages.sent-success'))
        ->body(__('messages.we-will-contact-you'))
        ->success()
        ->iconColor('success')
        ->color('success')
        ->persistent()
        ->send();

        $this->reset();
    }


    public function render()
    {
        return view('livewire.contact-live-wire');
    }
}
