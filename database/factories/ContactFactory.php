<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => '+7 916 191 99 15',
            'email' => 'info@tclvovo.ru',
            'address' => 'город Москва, поселение Вороновское, деревня Львово, Крутовская улица, дом 29 строение 7'
        ];
    }
}
