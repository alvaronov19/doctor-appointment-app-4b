<x-admin-layout 
    title="Roles | MediMatch"
    :breadcrumbs="[
        [
            'name' => 'Dashboard',
            'href' => route('admin.dashboard'),
        ],
        [
            'name' => 'Roles',
        ],
    ]">

    @livewire('admin.datatables.role-table')
</x-admin-layout>
