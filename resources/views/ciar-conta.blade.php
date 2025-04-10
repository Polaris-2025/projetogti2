@vite(['resources/css/app.css', 'resources/js/app.js'])

<section class="bg-white dark:bg-gray-900">

    {{--Div Principal  --}}
<div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white"> Organização das Nações Unidas
</h2>
<p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl"> Este site é dedicado a informações confidenciais a respeito de todas as nações do geoíde, caso tenha chegado aqui por acidente, se retire imediatamente. Caso seja verificado, pode prosseguir.</p>
<form action="{{route('salva-conta')}}" method="POST" class="space-y-8">
 @csrf

{{-- Div 1 --}}
<div>
<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Email:</label>
<input  name="nome"    type="email" id="email"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
placeholder="name@flowbite.com" required>
</div>

{{-- Div 2 --}}
<div>
<label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome :  </label>
<input   name="email" type="text" id="nome"
class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
placeholder="Let us know how we can help you" required>
</div>

{{-- Div 3 --}}

<div>
<label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dígitos:   </label>
<input  name="password" type="password" id="password"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
placeholder="                                   " required>
</div>

<button type="submit"
 class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blu-600 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Criar
 Conta</button>
</form>
</div>
</section>
