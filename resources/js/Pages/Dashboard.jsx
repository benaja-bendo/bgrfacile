import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';

export default function Dashboard(props) {
    const {auth} = props;
    return (<AuthenticatedLayout
    >
        <Head title="Dashboard"/>

        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="p-6 text-gray-900 dark:text-gray-100">
                        <h1 className="text-2xl font-bold">Dashboard</h1>
                        <p className="text-lg">Welcome {auth.user.name}!</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>);
}
