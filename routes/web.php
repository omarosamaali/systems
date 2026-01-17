<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::post('/send-contact', function (Request $request) {
    $data = [
        'name'    => $request->name,
        'email'   => $request->email,
        'phone'   => $request->phone,
        'message' => $request->message,
        'date'    => now()->format('Y-m-d h:i A'),
    ];

    Mail::send([], [], function ($message) use ($data) {
        $html = "
        <div style='background-color: #f8f9fa; padding: 30px; font-family: Arial, sans-serif;'>
            <div style='max-width: 650px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05);'>
                
                <div style='background-color: #000000; padding: 25px; text-align: center;'>
                    <h1 style='color: #ffffff; margin: 0; font-size: 22px; letter-spacing: 2px;'>EVORQ TECHNOLOGIES</h1>
                </div>

                <div style='padding: 30px;'>
                    <h3 style='text-align: center; color: #1f2937; border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 25px;'>
                        New Inquiry | طلب تواصل جديد
                    </h3>

                    <table style='width: 100%; border-collapse: collapse; margin-bottom: 30px;'>
                        <tr style='border-bottom: 1px solid #f3f4f6;'>
                        <td style='padding: 15px 10px; text-align: left; color: #6b7280; font-weight: bold; width: 25%;'>Name</td>
                        <td style='padding: 15px 10px; text-align: center; color: #111827; font-weight: bold; font-size: 16px;'>" . e($data['name']) . "</td>
                        <td style='padding: 15px 10px; text-align: right; color: #6b7280; font-weight: bold; width: 25%;'>الاسم</td>
                        </tr>

                        <tr style='border-bottom: 1px solid #f3f4f6;'>
                        <td style='padding: 15px 10px; text-align: left; color: #6b7280; font-weight: bold;'>Email Address</td>
                        <td style='padding: 15px 10px; text-align: center; color: #2563eb;'>" . e($data['email']) . "</td>
                        <td style='padding: 15px 10px; text-align: right; color: #6b7280; font-weight: bold;'>البريد الإلكتروني</td>
                        </tr>

                        <tr style='border-bottom: 1px solid #f3f4f6;'>
                        <td style='padding: 15px 10px; text-align: left; color: #6b7280; font-weight: bold;'>Phone Number</td>
                        <td style='padding: 15px 10px; text-align: center; color: #111827; direction: ltr;'>" . e($data['phone']) . "</td>
                        <td style='padding: 15px 10px; text-align: right; color: #6b7280; font-weight: bold;'>رقم الهاتف</td>
                        </tr>

                        <tr style='border-bottom: 1px solid #f3f4f6;'>
                        <td style='padding: 15px 10px; text-align: left; color: #6b7280; font-weight: bold;'>Sent Date</td>
                        <td style='padding: 15px 10px; text-align: center; color: #9ca3af; font-size: 13px;'>" . $data['date'] . "</td>
                        <td style='padding: 15px 10px; text-align: right; color: #6b7280; font-weight: bold;'>تاريخ الإرسال</td>
                        </tr>
                    </table>

                    <div style='display: flex;justify-content:space-between;align-items:center; width: 100%;'>
                        <div style='width: 50%;padding: 15px 10px; text-align: left; color: #6b7280; font-weight: bold;'>Message</div>
                        <div style='width: 50%;padding: 15px 10px; text-align: right; color: #6b7280; font-weight: bold;'>الرسالة</div>
                    </div>
                    <div style='text-align: right; margin-top: 20px;'>
                        <div style='background-color: #f9fafb; padding: 20px; border-radius: 8px; border: 1px solid #e5e7eb; color: #374151; line-height: 1.6; text-align: justify;'>
                            " . nl2br(e($data['message'])) . "
                        </div>


                    </div>
                </div>

                <div style='background-color: #000000; padding: 15px; text-align: center; font-size: 11px; color: #9ca3af;'>
                    This is an automated message from the <strong>EVORQ</strong> contact system.<br>
                    © " . date('Y') . " EVORQ Technologies. Dubai, UAE.
                </div>
            </div>
        </div>";

        $message->to('987omar123osama456@gmail.com')
            ->subject('🔔 [' . $data['name'] . '] Has Sent a Message')
            ->html($html);
    });

    return back()->with('success', 'تم إرسال رسالتك بنجاح! شكراً لتواصلك معنا.');
})->name('contact.send');


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
