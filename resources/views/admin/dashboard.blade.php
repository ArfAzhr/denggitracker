<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <head>
        <style>
        #reports {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #reports td, #reports th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #reports tr:nth-child(even){background-color: #f2f4f2;}

        #reports tr:hover {background-color: #ddd;}

        #reports th {
        padding-top: 20px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #52527a;
        color: white;
        }
        h1 {  
        font-family: 'Trocchi', 
        serif; font-size: 45px; 
        font-weight: normal; 
        line-height: 48px; margin: 0; 
        }
        </style>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 align="center">E-Report</h1>
        <br>
        <table id="reports">
        <tr>
            <th>Title</th>
            <th>Report Description</th>
            <th>Attachment</th>
        </tr>
        <tr>
            <td>#</td>
            <td>##</td>
            <td>###</td>
        </tr>
        <tr>
            <td>#</td>
            <td>##</td>
            <td>###</td>
        </tr>
        <tr>
            <td>#</td>
            <td>##</td>
            <td>###</td>
        </tr>
        <tr>
            <td>#</td>
            <td>##</td>
            <td>###</td>
        </tr>
        </table><br><br>

            </div>
        </div>
    </div>
</x-admin-layout>
