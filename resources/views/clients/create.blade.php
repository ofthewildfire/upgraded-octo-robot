<x-app-layout>
    <div class="p-6 mt-4 flex flex-col w-[90%] mx-auto h-full text-slate-300  rounded-lg bg-clip-border">
        <main class="w-full text-left table-auto min-w-max">
            <form method="post" action="/clients">
                @csrf
                <div>
                    <div class="mt-6">
                        <label for="name" class="p-2  mr-4 border-slate-600 bg-slate-700">Name</label>
                        <input type="text" id="name"  name='name'  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                        <x-errors name="name"></x-errors>
                    </div>

                    <div class="mt-6">
                        <label for="email" class="p-2  mr-4 border-slate-600 bg-slate-700">Email</label>
                        <input type="email" id="email"  name='email'  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                        <x-errors name="email"></x-errors>
                    </div>

                    <div class="mt-6">
                        <label for="phone" class="p-2  mr-4 border-slate-600 bg-slate-700">Phone</label>
                        <input type="text" id="phone"  name='phone'  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                        <x-errors name="phone"></x-errors>
                    </div>

                    <div class="mt-6">
                        <label for="company" class="p-2  mr-4 border-slate-600 bg-slate-700">Company</label>
                        <input type="text" id="company"  name='company'  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                        <x-errors name="company"></x-errors>
                    </div>
                </div>
                <br>
                <div>
                    <button class="bg-green-900 px-6 rounded-sm py-2 font-bold">Add Client</button>
                </div>
            </form>
        </main>
        <br>
    </div>
    <br>
</x-app-layout>
