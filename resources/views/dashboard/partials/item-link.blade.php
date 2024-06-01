<a href="{{ $link ?? '#' }}" target="_blank"  class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 384 512"><path fill="#991414"
         d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34M332.1 128H256V51.9zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288zm250.2-143.7c-12.2-12-47-8.7-64.4-6.5c-17.2-10.5-28.7-25-36.8-46.3c3.9-16.1 10.1-40.6 5.4-56c-4.2-26.2-37.8-23.6-42.6-5.9c-4.4 16.1-.4 38.5 7 67.1c-10 23.9-24.9 56-35.4 74.4c-20 10.3-47 26.2-51 46.2c-3.3 15.8 26 55.2 76.1-31.2c22.4-7.4 46.8-16.5 68.4-20.1c18.9 10.2 41 17 55.8 17c25.5 0 28-28.2 17.5-38.7m-198.1 77.8c5.1-13.7 24.5-29.5 30.4-35c-19 30.3-30.4 35.7-30.4 35m81.6-190.6c7.4 0 6.7 32.1 1.8 40.8c-4.4-13.9-4.3-40.8-1.8-40.8m-24.4 136.6c9.7-16.9 18-37 24.7-54.7c8.3 15.1 18.9 27.2 30.1 35.5c-20.8 4.3-38.9 13.1-54.8 19.2m131.6-5s-5 6-37.3-7.8c35.1-2.6 40.9 5.4 37.3 7.8"/>
        </svg>
    </div>

    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white"> {{ $name ?? '' }} </h2>
        <p class="mt-4 text-sm/relaxed">
            {{ $description ?? '' }}
        </p>
    </div>
</a>
