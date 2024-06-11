import DocsCardContent from "@/Components/DocsCardContent/DocsCardContent";
import Footer from "@/Components/Footer";
import Header from "@/Components/Header/Header";
import InfoLine from "@/Components/InfoLine/InfoLine";
import Main from "@/Components/Main/Main";
import WelcomeSection from "@/Components/WelcomeSection/WelcomeSection";
import { Head } from "@inertiajs/react";

export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Bem vindo" />
            <div className="bg-gray-50 text-black/50 dark:text-white/50">
                <img
                    id="background"
                    className="absolute -left-20 top-0 max-w-[877px]"
                    src="https://laravel.com/assets/img/welcome/background.svg"
                />
                <div className="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#ffe863] selection:text-black">
                    <div className="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                        <Header
                            auth={auth}
                            loginText="Entrar"
                            registerText="Cadastrar"
                        />
                        <WelcomeSection />
                        <Main />
                        <Footer />
                    </div>
                </div>
            </div>
        </>
    );
}
