@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Privacy Policy</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        In this section you can manage your privacy settings.
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2 space-y-8">
                    <div>
                        <h2
                            class="font-medium text-xl text-cool-gray-700 mb-4">Informace o ochraně osobních údajů</h2>
                        <p class="text-cool-gray-600 mb-4">
                            V naší firmě chápeme důležitost ochrany vašich osobních informací. Na naší platformě máte
                            plnou moc a kontrolu nad vašimi údaji.
                        </p>
                        <p class="text-cool-gray-600 mb-4">V této sekci je možné:</p>
                        <ul class="mb-8">
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Spravovat vaše preference a souhlasy.
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Stáhnout data, které o vás evidujeme v čitelné podobě.
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Požádat o nenávratné smazání vašeho účtu, včetně osobních informací týkajících se vašeho
                                účtu.
                            </li>
                        </ul>
                        <p class="text-cool-gray-600 mb-4">
                            Chcete-li se dozvědět více informací o tom, jak zpracováváme vaše osobní informace,
                            navštivte stránku zásady ochrany osobních údajů.
                        </p>
                    </div>

                    <div>
                        <h2 class="font-medium text-xl text-cool-gray-700 mb-4">Nenávratné odstranění účtu</h2>
                        <p class="text-cool-gray-600 mb-4">
                            Ctíme vaše právo na smazání vašich dat z naší platformy, včetně služeb třetích stran, se
                            kterými spolupracujeme.
                        </p>
                        <p class="text-cool-gray-600 mb-4">Pokud podáte žádost o smazání vašeho účtu:</p>
                        <ul class="mb-4">
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Nenávratně odstraníme váš účet a všechny informace spojené s tímto účtem z našich
                                serverů
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Požádáme všechny služby třetích stran, které používáme, o odstranění dat týkajících se
                                vašeho účtu
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Budeme vás kontaktovat a informovat o procesu a výsledku vaší žádosti
                            </li>
                        </ul>
                        <p class="text-cool-gray-600 mb-4">
                            Mějte prosím na vědomí, že kvůli legislativním povinnostem máme povinnost evidovat některé
                            informace. Toto se týká například těchto údajů:
                        </p>
                        <ul class="mb-4">
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Fakturační údaje a informace týkající se provedených transakcí, pro daňové a účetní
                                účely
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Informace o právnické osobě, pokud jste si u nás založili obchod nebo uskutečnili
                                transakci
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                Informace o produktech, u kterých došlo k transakci na naší platformě
                            </li>
                        </ul>
                        <p class="text-cool-gray-600 mb-4">
                            Pokud máte jakýkoliv dotaz nebo připomínky, neváhejte nás kontaktovat. Rádi vám pomůžeme.
                        </p>
                        <p class="text-cool-gray-600 font-semibold mb-4">
                            Vaši žádost o smazání účtu prosím zašlete na emailovou adresu team@nulisec.com
                        </p>
                        <p class="text-cool-gray-600 mb-4">
                            Vaší žádost zpracujeme a dokončíme do 30 dnů po obdržení žádosti.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Preferences</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Would you like to receive our newsletters?
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-form :action="route('profile.update-subscription-settings')">
                        <x-checkbox name="receive_newsletter"
                                    title="Receive Newsletter"
                                    class="mt-4"
                                    :value="auth()->user()->receive_newsletter">
                        </x-checkbox>

                        <div class="mt-8 text-right">
                            <div class="inline-flex rounded-md shadow-sm">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                                    Save
                                </button>
                            </div>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
