<x-app-layout>
    <div class="p-6 mt-4 flex flex-col w-[90%] mx-auto h-full text-slate-300  rounded-lg bg-clip-border">
        <main class="w-full text-left table-auto min-w-max">
            <section>
                <h2 class="mb-5 text-2xl font-bold text-center"> <span class="underline text-gray-400">{{$client->name}}</span> Contact Details </h2>
            <div>
                <h2 class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Name
                    </p>
                </h2>
                <h3 class="p-4 border-b border-slate-700">
                    <p class="text-sm text-slate-100 font-semibold">
                        {{$client->name}}
                    </p>
                </h3>
                <h2 class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Email
                    </p>
                </h2>
                <h3 class="p-4 border-b border-slate-700">
                    <p class="text-sm text-slate-300">
                        {{$client->email}}
                    </p>
                </h3>
                <h2 class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Phone
                    </p>
                </h2>
                <h3 class="p-4 border-b border-slate-700">
                    <p class="text-sm text-slate-300">
                        {{$client->phone}}
                    </p>
                </h3>
                <h2 class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Company
                    </p>
                </h2>
                <h3 class="p-4 border-b border-slate-700">
                    <p class="text-sm text-slate-300">
                        {{$client->company}}
                    </p>
                </h3>
            </div>
            </section>
        </main>
        <br>
        <h3 class="p-4 border-slate-700">
            <p class="text-sm text-slate-300">
                <a class="bg-blue-500 px-6 rounded-sm py-2 font-bold" href="/client/{{$client->id}}/edit">Edit {{$client->name}} </a>
            </p>
            <p class="text-sm mt-8 text-slate-300">
                <a class="bg-orange-500 px-6 rounded-sm py-2 font-bold" href="/clients">Back to clients</a>
            </p>
        </h3>
        <br>
    </div>
    <br>
</x-app-layout>
