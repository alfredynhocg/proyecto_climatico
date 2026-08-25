<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function send(Request $request): Response
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email'],
                'phone' => ['nullable', 'string', 'max:50'],
                'message' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            return response(
                collect($e->errors())->flatten()->implode(' '),
                422
            );
        }

        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\nPhone: " . ($data['phone'] ?? '') . "\nMessage:\n{$data['message']}",
            function ($mail) use ($data) {
                $mail->to(config('mail.from.address'))
                    ->subject("New contact from {$data['name']}")
                    ->replyTo($data['email'], $data['name']);
            }
        );

        return response('Thank You! Your message has been sent.', 200);
    }
}
