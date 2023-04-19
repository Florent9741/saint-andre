@vite('resources/css/app.css')
        @vite('resources/js/app.js')

<section class="mt-6 text-black bg-gray-200 rounded-lg body-font">
    <div class="container px-5 py-10 mx-auto ">
        <div class="flex flex-col w-full mb-20 text-center ">
            <h1 class="pb-4 mb-2 text-3xl font-medium sm:text-4xl title-font">Liste des numéro</h1>

            <table class="object-center whitespace-no-wrap bg-gray-100 table-auto">
               
                    <div class="alert alert-success">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">      
                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-deleted">
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">      
                           
                            </div>
                        </div>
                    </div>
                
                
                <thead>
                    <tr
                        class="px-4 py-3 text-sm font-medium tracking-wider text-white rounded-b title-font bg-slate-600">
                        <th class="px-5 py-3 border-2 ">Nom</th>
                        <th class="px-5 py-3 border-2 ">Image</th>
                        <th class="px-5 py-3 border-2 ">mobile</th>
                        <th class="px-5 py-3 border-2 ">fixe</th>
                        <th class="px-5 py-3 border-2 ">marque</th>
                        <th class="px-5 py-3 border-2 ">opérateur</th>
                        <th class="px-5 py-3 border-2 ">Nouveau</th>
                        <th class="px-5 py-3 border-2 ">Modifier</th>
                    </tr>
                </thead>
                <tbody>
                  
                        <tr class="tborder">
                            <td class="px-4 py-3 border-2 "><a
                                    href=""></a></td>
                            <td class="px-4 py-3 border-2"><img class="rounded-lg w-80"
                                    src=""> </td>
                            <td class="px-4 py-3 border-2 "><a class="resume"></a></td>
                            <td class="px-4 py-3 border-2">
                            
                           <a></a>
                            
                        </td>
                            <td class="px-4 py-3 border-2"><a></a></td>
                            <td class="px-4 py-3 border-2"><a></a></td>
                            <td class="px-4 py-3 border-2"><a></a></td>
                            <td class="px-4 py-3 border-2">
                               
                            </td>
                        </tr>
                   

                </tbody>
            </table>
        </div>
    </div>
</section>