@component('mail::message')
# Introduction

This is your offer mail !

The Clothing store is opening latest deals for public 
upto 50% off on Shirts and Trousers ..

So , Hurry up Limited edition 
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
