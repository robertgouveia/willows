<x-layout>
    <div class="w-full flex justify-center px-4">
        <div class="bg-white w-full max-w-[800px] rounded-md border border-slate-300">
            <h1 class="text-center text-2xl font-medium text-slate-600 my-3 pb-4 border-b">Sign in to your account</h1>
            <form action="{{route('auth.store')}}" method="POST" class="w-full flex flex-col">
                @csrf
                <div class="flex flex-col px-4">
                    <label for="email" class="font-medium pe-4">Email:</label>
                    <input type="email" name="email" class="border border-slate-300 rounded-md py-1">
                </div>
                <div class="flex flex-col px-4">
                    <label for="password" class="font-medium pe-4">Password:</label>
                    <input type="password" name="password" class="w-full border border-slate-300 rounded-md py-1">
                </div>
                <div class="flex justify-between w-full px-4 py-2">
                    <div class="">
                        <input type="checkbox" name="remember">
                        <label for="">Remember me</label>
                    </div>
                    <a href="#" class="text-indigo-800 hover:underline">Forgot Password?</a>
                </div>
                <div class="px-4">
                    <button class="w-full my-4 px-3 py-1 border border-slate-300 rounded-md font-medium hover:bg-slate-200">Login</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
