<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

    
                <div class="p-6 text-gray-900">
                    {{ __("You're logged admin!") }}

                    <div>
                    <h1>User List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Completed</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" placeholder="ID"></td>
            <td><input type="text" placeholder="Title"></td>
            <td><input type="text" placeholder="Description"></td>
            <td>
                <select>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </td>
            <td><button class="button">Edit</button></td>
            <td><button class="button button-secondary">Delete</button></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="ID"></td>
            <td><input type="text" placeholder="Title"></td>
            <td><input type="text" placeholder="Description"></td>
            <td>
                <select>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </td>
            <td><button class="button">Edit</button></td>
            <td><button class="button button-secondary">Delete</button></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="ID"></td>
            <td><input type="text" placeholder="Title"></td>
            <td><input type="text" placeholder="Description"></td>
            <td>
                <select>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </td>
            <td><button class="button">Edit</button></td>
            <td><button class="button button-secondary">Delete</button></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="ID"></td>
            <td><input type="text" placeholder="Title"></td>
            <td><input type="text" placeholder="Description"></td>
            <td>
                <select>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </td>
            <td><button class="button">Edit</button></td>
            <td><button class="button button-secondary">Delete</button></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="ID"></td>
            <td><input type="text" placeholder="Title"></td>
            <td><input type="text" placeholder="Description"></td>
            <td>
                <select>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                </select>
            </td>
            <td><button class="button">Edit</button></td>
            <td><button class="button button-secondary">Delete</button></td>
        </tr>
    </tbody>
</table>


                    </div>
                </div>

               
            </div>
        </div>
    </div>
</x-app-layout>
