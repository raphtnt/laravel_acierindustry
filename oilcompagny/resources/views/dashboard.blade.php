<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
              <p class="text-center" style="font-size: 1.75rem;">Stats</p>
                <p class="info">Depuis le début : 50 trajets</p>
                <p class="info">Semaine : 50 trajets</p>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <p class="text-center" style="font-size: 1.75rem;">Légende</p>
                <p class="info">Vert = En cours</p>
                <p class="info">Jaune = Annulé</p>
                <p class="info">Rien = Terminé</p>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <p class="text-center" style="font-size: 1.75rem; padding: 1rem 0;">Listes de vos trajets</p>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Envoie
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Recu
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Intérimaire
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Farm
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Heure départ
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Heure de retour
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Durée
                            </th>
                        </tr>
                        </thead>
                        <tbody style="background-color: rgb(255,245,173)">

                        @foreach($lastruns as $lr)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" @style([
        'background-color: rgba(75,255,158,0.65);' => $lr->status == 'En cours',
        'background-color: rgb(255,245,173)' => $lr->status == 'Annulé',
])>
                        <td>
                            <div class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ $lr->sendInterim->profile_photo_url }}" alt="logouser">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $lr->status }}. {{ $lr->sendInterim->firstname[0] }}. {{ $lr->sendInterim->lastname }}</div>
                                    <div class="font-normal text-gray-500">Role</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ $lr->receiveInterim->profile_photo_url }}" alt="logouser">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $lr->receiveInterim->firstname[0] }}. {{ $lr->receiveInterim->lastname }}</div>
                                    <div class="font-normal text-gray-500">Role</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ $lr->interim->profile_photo_url }}" alt="logouser">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $lr->interim->firstname }} {{ $lr->interim->lastname }}</div>
                                    <div class="font-normal text-gray-500">Role</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $lr->items->name }}</div>
                                    <div class="font-normal text-gray-500">{{ $lr->quantity }} * {{ $lr->unitprice }} = {{ number_format($lr->quantity *  $lr->unitprice, 0, ' ', ' ') }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $lr->created_at->isoFormat('DD/MM/YYYY à HH:mm:ss') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $lr->updated_at->isoFormat('DD/MM/YYYY à HH:mm:ss') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $lr->updated_at->diff($lr->created_at)->format('%H:%I:%S') }}
                        </td>
                    </tr>

                        @endforeach



                        </tbody>
                    </table>
                </div>

                <div style="margin: 1rem 0;">
                    {{ $lastruns->links() }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
