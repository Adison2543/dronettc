<?php

use Illuminate\Support\Facades\Auth;
use Phattarachai\LineNotify\Facade\Line;
use Livewire\Volt\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\RateLimiter;

new class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $agency = '';
    public string $phone = '';
    public string $social = '';
    public string $message = '';
    public string $captcha = '';
    /**
     * Update the password for the currently authenticated user.
     */

    public function send2Line(): void
    {
        // Define the rate limiting parameters
        $key = 'send2Line.' . Request::ip();
        $maxAttempts = 3; // Number of attempts allowed
        $decayMinutes = 5; // Cooldown period in minutes

        // Check if the user has exceeded the rate limit
        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $this->dispatch('limiterror');
            return;
        }

        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'between:8,20'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'captcha' => 'required|captcha'
        ]);

        try {
            $ipAddress = Request::ip();

            Contact::creat([
                'name' => $this->name,
                'email' => $this->email,
                'agn' => $this->agency,
                'phone' => $this->phone,
                'message' => $this->message,
                'social' => $this->social,
                'ip_addr' => $ipAddress
            ]);

            Line::send("\nชื่อ => ". $this->name .
                "\nEmail => ". $this->email .
                "\nหน่วยงาน => ". $this->agency .
                "\nโทรศัพท์ => ". $this->phone .
                "\nSocial => ". $this->social.
                "\nข้อความ => " . $this->message
            );

            RateLimiter::hit($key, $decayMinutes * 60);

            $this->dispatch('success');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatch('error');
        }
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('math')]);
    }
}; ?>


<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.0135083544146!2d102.85578767601251!3d16.424140329837293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bea5279c7d5%3A0xd098a61935e43d5f!2zRHJvbmVUVEMgLSDguYDguKPguLXguKLguJnguJrguLTguJnguYLguJTguKPguJnguJ7guKPguYnguK3guKHguILguLbguYnguJnguJfguLDguYDguJrguLXguKLguJnguYLguJTguKPguJk!5e0!3m2!1sth!2sth!4v1702540459595!5m2!1sth!2sth" ></iframe>
        <div class="bg-white relative invisible md:visible flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">200, 222 หมู่ 2 Chaiyaphruek Rd, Nai Mueang, Mueang Khon Kaen District, Khon Kaen 40000</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed">Dronettc@iddrives.co.th</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">+6661 925 6996</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        {{-- <img src="/img/qrdronettc.jpg" alt=""> --}}
        <form wire:submit="send2Line" >
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
            <p class="mx-auto mb-5 leading-relaxed text-base">กรุณากรอกข้อมูลให้ครบถ้วนและถูกต้องเพื่อความสะดวกและรวดเร็วในการติดต่อกลับของเจ้าหน้าที่</p>

            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input wire:model="name" maxlength="100" type="text" required id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input wire:model="email" maxlength="100" type="email" required id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class="relative mb-4">
                <label for="agency" class="leading-7 text-sm text-gray-600">Agency</label>
                <input wire:model="agency" maxlength="100" type="text" id="agency" name="agency" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class="relative mb-4">
                <label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
                <input wire:model="phone" type="number" required id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @if($errors->has('phone'))
                    <div class="text-xs text-red-500">
                        หมายเลขโทรศัพท์ไม่ถูกต้อง
                    </div>
                @endif
            </div>
            <script>
                function checkLength(input) {
                    if (input.value.length > 10) {
                        input.value = input.value.slice(0, 10);
                    }
                }
            </script>

            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea wire:model="message" maxlength="500" id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-16 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>

            <div class="relative mb-4">
                <label for="social" class="leading-7 text-sm text-gray-600">Social</label>
                <input wire:model="social" maxlength="200" type="text" id="social" name="social" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>

            <div class=" mt-10">
                <div class="captcha flex gap-2">
                    <span>{!! captcha_img('math') !!}</span>
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>
            <div class="relative mb-4">
                <label for="social" class="leading-7 text-sm text-gray-600">Enter result:</label>
                <input wire:model="captcha" required maxlength="200" type="text" placeholder="Enter Captcha" id="captcha" name="captcha" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @if($errors->has('captcha'))
                    <div class="text-xs text-red-500">
                        ผลลัพธ์ไม่ถูกต้อง
                    </div>
                @endif
            </div>

            <div class="flex items-center">
                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                <x-action-message class="me-3 ms-3 text-green-400" on="success">
                    {{ __('Success!') }}
                </x-action-message>
                <x-action-message class="me-3 ms-3 text-red-400" on="error">
                    {{ __('Sorry, Something wrong!') }}
                </x-action-message>
                <x-action-message class="me-3 ms-3 text-red-400" on="limiterror">
                    {{ __('Too many attempts. Please try again later in 5 minute.') }}
                </x-action-message>
            </div>

            <p class="text-xs text-gray-500 mt-3">เจ้าหน้าที่จะติดต่อกลับในไม่ช้าตามช่องทางที่ท่านได้แจ้งไว้.</p>
        </form>

        <div class="bg-white relative md:hidden flex flex-wrap py-6 rounded shadow-md mt-10">
            <div class="lg:w-1/2 px-6">
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
              <p class="mt-1">200, 222 หมู่ 2 Chaiyaphruek Rd, Nai Mueang, Mueang Khon Kaen District, Khon Kaen 40000</p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
              <a class="text-indigo-500 leading-relaxed">Dronettc@iddrives.co.th</a>
              <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
              <p class="leading-relaxed">+6661 925 6996</p>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

    </script>
  </section>
