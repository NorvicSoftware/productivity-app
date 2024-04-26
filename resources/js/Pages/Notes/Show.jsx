import { usePage } from "@inertiajs/react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";

export default function Show({ auth }){
    const { note } = usePage().props;
    console.log(note);
    function deleteNote(event) {
        console.log("Eliminar");
    }
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">VER NOTA</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <p>Titulo: { note.title }</p>
                            <p>Contenido: { note.content }</p>
                            
                        </div>
                        <SecondaryButton onClick={deleteNote}>Eliminar</SecondaryButton>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    )
}