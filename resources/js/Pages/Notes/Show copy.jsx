import { usePage } from "@inertiajs/react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import PrimaryButton from "@/Components/PrimaryButton";
import SecondaryButton from "@/Components/SecondaryButton";

export default function Show({ auth }){
    const { note } = usePage().props;
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">LISTADO DE NOTAS</h2>}
        >
            <Head title="LISTADO DE NOTAS" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                           <table>
                            <thead>
                                <tr>
                                    <td>TITULO</td>                                
                                    <td>Descripcion de la Nota</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                { notes.map((note, index) => (
                                      <tr>
                                      <td>{note.title}</td>                                
                                      <td>Descripcion de la Nota</td>
                                      
                                  </tr>
                                )) }
                            </tbody>
                            </table> 
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    )
}