import { usePage } from "@inertiajs/react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";

export default function Show({ auth }) {
    const { notes } = usePage().props;
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">LISTADO DE NOTAS</h2>}
        >
            <Head title="Listado de Notas" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <table>
                            <thead>
                                <tr>
                                    <td>Titulo</td>
                                    <td>Descripcion Nota</td>
                                </tr>
                            </thead>
                            <tbody>
                                {notes.map((note, index) => (
                                    <tr>
                                        <td>{ note.title}</td>
                                        <td>{ note.content}</td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    )
}