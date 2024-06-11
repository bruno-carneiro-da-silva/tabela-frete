import Dropdown from "@/Components/Dropdown";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Link, Head } from "@inertiajs/react";

export default function Welcome({ auth }) {
    const handleImageError = () => {
        document
            .getElementById("screenshot-container")
            ?.classList.add("!hidden");
        document.getElementById("docs-card")?.classList.add("!row-span-1");
        document
            .getElementById("docs-card-content")
            ?.classList.add("!flex-row");
        document.getElementById("background")?.classList.add("!hidden");
    };

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
                        <header className="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                            <div className="flex lg:justify-center lg:col-start-2">
                                {/* <svg
                                    className="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]"
                                    viewBox="0 0 62 65"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                        fill="currentColor"
                                    />
                                </svg> */}
                            </div>
                            <nav className="-mx-3 flex gap-3 justify-end">
                                {auth.user ? (
                                    <Link
                                        href={route("dashboard")}
                                        className="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#000] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Página inicial
                                    </Link>
                                ) : (
                                    <>
                                        <Link
                                            href={route("login")}
                                            className="rounded-md px-3 py-2 border border-spacing-1 border-gray-400 text-black ring-1 ring-transparent transition hover:text-yellow-500 focus:outline-none focus-visible:ring-[#000] dark:text-black dark:hover:text-yellow-500 dark:focus-visible:ring-white"
                                        >
                                            Entrar
                                        </Link>
                                        <Link
                                            href={route("register")}
                                            className="rounded-md px-3 py-2  border border-spacing-1 border-gray-400 text-black ring-1 ring-transparent transition  hover:text-yellow-500  focus:outline-none focus-visible:ring-[#000] dark:text-black  dark:hover:text-yellow-500 dark:focus-visible:ring-white"
                                        >
                                            Cadastrar
                                        </Link>
                                    </>
                                )}
                            </nav>
                        </header>

                        <section>
                            <h1 className="text-4xl font-bold text-black dark:text-black">
                                Calculadora de frete
                            </h1>
                            <p className="mt-4 text-lg text-black dark:text-black">
                                Use o simulador para cálculo dos pisos mínimos
                                de frete com base na tabela da ANTT estabelecida
                                pela Resolução abaixo.  
                            </p>
                        </section>

                        <main className="mt-6">
                            <div className="grid gap-6 lg:grid-cols-2 lg:gap-8">
                                <div
                                    id="docs-card"
                                    className="flex h-[590px] items-start gap-6 overflow-hidden rounded-lg p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.1] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#ffe863] md:row-span-3 lg:p-10 lg:pb-10 bg-[#f1f5f9]  dark:hover:text-white/70 dark:focus-visible:ring-[#ffe863]"
                                >
                                    <div className="absolute w-full flex items-center gap-6 lg:items-end">
                                        <div
                                            id="docs-card-content"
                                            className="flex items-start gap-6 lg:flex-col"
                                        >
                                            <InputLabel
                                                htmlFor="teste"
                                                className="text-[#374151]"
                                                value="Tipo de carga:"
                                            />

                                            <Dropdown>
                                                <Dropdown.Trigger>
                                                    <span className="inline-flex rounded-md">
                                                        <button
                                                            type="button"
                                                            className="flex w-[525px] h-[49px] justify-between  items-center px-3 py-2 border border-spacing-1 border-gray-400 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                                        >
                                                            teste
                                                            <svg
                                                                className="ms-2 -me-0.5 h-4 w-4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20"
                                                                fill="currentColor"
                                                            >
                                                                <path
                                                                    fillRule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clipRule="evenodd"
                                                                />
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </Dropdown.Trigger>

                                                <Dropdown.Content>
                                                    <Dropdown.Link
                                                        href={route(
                                                            "profile.edit"
                                                        )}
                                                    >
                                                        Perfil
                                                    </Dropdown.Link>
                                                    <Dropdown.Link
                                                        href={route("logout")}
                                                        method="post"
                                                        as="button"
                                                    >
                                                        Sair
                                                    </Dropdown.Link>
                                                </Dropdown.Content>
                                            </Dropdown>

                                            <InputLabel
                                                htmlFor="teste"
                                                className="text-[#374151]"
                                                value="Tipo de carga:"
                                            />
                                            <Dropdown>
                                                <Dropdown.Trigger>
                                                    <span className="inline-flex rounded-md">
                                                        <button
                                                            type="button"
                                                            className="flex w-[525px] h-[49px] justify-between  items-center px-3 py-2 border border-spacing-1 border-gray-400 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                                        >
                                                            teste
                                                            <svg
                                                                className="ms-2 -me-0.5 h-4 w-4"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20"
                                                                fill="currentColor"
                                                            >
                                                                <path
                                                                    fillRule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clipRule="evenodd"
                                                                />
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </Dropdown.Trigger>

                                                <Dropdown.Content>
                                                    <Dropdown.Link
                                                        href={route(
                                                            "profile.edit"
                                                        )}
                                                    >
                                                        Perfil
                                                    </Dropdown.Link>
                                                    <Dropdown.Link
                                                        href={route("logout")}
                                                        method="post"
                                                        as="button"
                                                    >
                                                        Sair
                                                    </Dropdown.Link>
                                                </Dropdown.Content>
                                            </Dropdown>

                                            <div className="grid gap-6 lg:grid-cols-2  justify-between">
                                                <InputLabel
                                                    htmlFor="teste"
                                                    className="text-[#374151]"
                                                    value="Tipo de carga:"
                                                />
                                                <InputLabel
                                                    htmlFor="teste"
                                                    className="text-[#374151]"
                                                    value="Num. eixos:"
                                                />
                                                <Dropdown>
                                                    <Dropdown.Trigger>
                                                        <span className="inline-flex rounded-md">
                                                            <button
                                                                type="button"
                                                                className="flex w-[250px] h-[49px] justify-between  items-center px-3 py-2 border border-spacing-1 border-gray-400 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                                            >
                                                                teste
                                                                <svg
                                                                    className="ms-2 -me-0.5 h-4 w-4"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                >
                                                                    <path
                                                                        fillRule="evenodd"
                                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                        clipRule="evenodd"
                                                                    />
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </Dropdown.Trigger>

                                                    <Dropdown.Content>
                                                        <Dropdown.Link
                                                            href={route(
                                                                "profile.edit"
                                                            )}
                                                        >
                                                            Perfil
                                                        </Dropdown.Link>
                                                        <Dropdown.Link
                                                            href={route(
                                                                "logout"
                                                            )}
                                                            method="post"
                                                            as="button"
                                                        >
                                                            Sair
                                                        </Dropdown.Link>
                                                    </Dropdown.Content>
                                                </Dropdown>
                                                <Dropdown>
                                                    <Dropdown.Trigger>
                                                        <span className="inline-flex rounded-md">
                                                            <button
                                                                type="button"
                                                                className="flex w-[250px] border border-spacing-1 border-gray-400 h-[49px] justify-between  items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                                            >
                                                                teste
                                                                <svg
                                                                    className="ms-2 -me-0.5 h-4 w-4"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                >
                                                                    <path
                                                                        fillRule="evenodd"
                                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                        clipRule="evenodd"
                                                                    />
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </Dropdown.Trigger>

                                                    <Dropdown.Content>
                                                        <Dropdown.Link
                                                            href={route(
                                                                "profile.edit"
                                                            )}
                                                        >
                                                            Perfil
                                                        </Dropdown.Link>
                                                        <Dropdown.Link
                                                            href={route(
                                                                "logout"
                                                            )}
                                                            method="post"
                                                            as="button"
                                                        >
                                                            Sair
                                                        </Dropdown.Link>
                                                    </Dropdown.Content>
                                                </Dropdown>
                                            </div>

                                            <InputLabel
                                                htmlFor="teste"
                                                className="text-[#374151]"
                                                value="Distância(KM)"
                                            />
                                            <TextInput
                                                type="text"
                                                name="teste"
                                                id="teste"
                                                className="w-full border border-spacing-1 border-gray-400 h-[49px]"
                                                placeholder="3000"
                                            />
                                            <PrimaryButton
                                                type="submit"
                                                className="w-full h-[50px] text-center font-bold size-4 justify-center"
                                            >
                                                Calcular valor do frete
                                            </PrimaryButton>
                                        </div>
                                    </div>
                                </div>

                                <div className="flex flex-col h-full w-[800px]  items-start gap-6 overflow-hidden rounded-lg p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-black/[0.1] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#ffe863] md:row-span-3 lg:p-10 lg:pb-10 bg-[#f1f5f9] dark:hover:text-black/70 dark:focus-visible:ring-[#ffe863]">
                                    <div className="pt-3 sm:pt-5 w-full">
                                        <h2 className="text-base mb-6 font-semibold text-black dark:text-black">
                                            Resultado da consulta:
                                        </h2>
                                        <div className="flex justify-between">
                                            <h2 className="text-base py-2 font-semibold text-black dark:text-black">
                                                Deslocamento (CCD):
                                            </h2>
                                            <h2 className="text-xl py-2 font-semibold text-black dark:text-black">
                                                R$300,00
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-300" />

                                        <div className="flex mt-3 justify-between">
                                            <h2 className="text-base py-2 font-semibold text-black dark:text-black">
                                                Carga e descarga (CC):
                                            </h2>
                                            <h2 className="text-xl py-2 font-bold text-black dark:text-black">
                                                R$300,00
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-300" />

                                        <div className="flex mt-4 justify-between">
                                            <h2 className="text-base py-2 font-semibold text-black dark:text-black">
                                                Total (CCD+CC):
                                            </h2>
                                            <h2 className="text-xl py-2 font-semibold text-black dark:text-black">
                                                R$300,00
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-300" />
                                    </div>

                                    <div className="pt-3 sm:pt-5 w-full">
                                        <h2 className="text-base mb-6 font-semibold text-black dark:text-black">
                                            Parâmetros utilizados na consulta:
                                        </h2>
                                        <div className="flex justify-between">
                                            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                                Portaria/Resolução:
                                            </h2>
                                            <h2 className="text-xl py-4 font-semibold text-black dark:text-gray-5   00">
                                                R$300,00
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-200" />

                                        <div className="flex mt-3 justify-between">
                                            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                                Categoria do transporte:
                                            </h2>
                                            <h2 className="text-xl py-4 font-bold text-black dark:text-gray-500">
                                                R$300,00
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-200" />

                                        <div className="flex mt-4 justify-between">
                                            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                                Tipo de carga:
                                            </h2>
                                            <h2 className="text-xl py-4 font-semibold text-black dark:text-gray-500">
                                                R$300,00
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-200" />
                                        <div className="flex mt-4 justify-between">
                                            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                                Num. eixos:
                                            </h2>
                                            <h2 className="text-xl py-4 font-semibold text-black dark:text-gray-500">
                                                6 eixos
                                            </h2>
                                        </div>
                                        <hr className="w-full border border-spacing-1 border-dashed border-gray-200" />
                                        <div className="flex mt-4 justify-between">
                                            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                                Distância:
                                            </h2>
                                            <h2 className="text-xl py-4 font-semibold text-black dark:text-gray-500">
                                                6000 km
                                            </h2>
                                        </div>

                                        <div className="flex mt-4 justify-between">
                                            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                                Link:
                                            </h2>
                                            <h2 className="text-sm py-4 font-semibold text-black dark:text-blue-500">
                                                https://www.in.gov.br/en/web/dou/-/resolucao-n-6.034-de-18-de-janeiro-de-2024-538363035
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>

                        <footer className="py-16 text-center text-sm text-black dark:text-black/70">
                            TKX Mobilidade Urbana v.1.0 - (2024)
                        </footer>
                    </div>
                </div>
            </div>
        </>
    );
}
