@component('mail::message')
# Introduction

Hello {{$pendaftaran->nama}},
Terimakasih telah mengikuti tes seleksi masuk di TPQ Masjid Ziyaadaturahman
kami ingin memberitahukan kepada kamu bahwa hasil seleksi kamu adalah
@if($pendaftaran->status = 'di terima')
{{$pendaftaran->status}}, Kami ucapkan selamat bergabung di TPQ Masjid Ziyaadaturahman
kami harap kamu dapat mengikuti peraturan yang berlaku dan belajar dengan seungguh-sunggu
@elseif($pendaftaran->status = 'di tolak')
{{$pendaftaran->status}}, Kami ucapkan mohon maaf atas hasil yang telah kamu terima
namun kami harap kamu tidak patah semangat terus berusaha dan rajin belajar.
@endif

Thanks,<br>
TPQ Masjid Ziyaadaturahman
@endcomponent