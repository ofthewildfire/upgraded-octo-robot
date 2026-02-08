<x-app-layout>
    <div class="p-6 mt-4 flex flex-col w-[90%] mx-auto h-full text-slate-300  rounded-lg bg-clip-border">
        <main class="w-full text-left table-auto min-w-max">
            <form method="post" action="/client/{{$client->id}}/update">
                @csrf
                @method("patch")
                <div>
                    <div class="mt-6">
                        <label for="name" class="p-2  mr-4 border-slate-600 bg-slate-700">Name</label>
                        <input type="text" id="name"  name='name' value="{{$client->name}}"  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                    </div>

                    <div class="mt-6">
                        <label for="email" class="p-2  mr-4 border-slate-600 bg-slate-700">Email</label>
                        <input type="email" id="email"  name='email' value="{{$client->email}}"  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                    </div>

                    <div class="mt-6">
                        <label for="phone" class="p-2  mr-4 border-slate-600 bg-slate-700">Phone</label>
                        <input type="text" id="phone"  name='phone' value="{{$client->phone}}"  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                    </div>

                    <div class="mt-6">
                        <label for="company" class="p-2  mr-4 border-slate-600 bg-slate-700">Company</label>
                        <input type="text" id="company"  name='company' value="{{$client->company}}"  class=" max-w-full text-sm bg-transparent text-slate-100 font-semibold" />
                    </div>


                </div>
                <br>
                <div>
                    <button class="bg-green-900 px-6 rounded-sm py-2 font-bold">Update {{$client->name}} </button>
                    <button class="bg-red-900 ml-3 px-6 rounded-sm py-2 font-bold" form="delete_client_record">Delete {{$client->name}} </button>
                </div>
            </form>
            <form id="delete_client_record" action="/client/{{$client->id}}/destroy" method="post">
                @csrf
                @method("delete")
            </form>
        </main>
        <br>
    </div>
    <br>
</x-app-layout>
