import { infoLine, infoLineResult } from "@/mock/InfoLine";
import React from "react";
import InfoLine from "@/Components/InfoLine/InfoLine";
import DocsCardContent from "@/Components/DocsCardContent/DocsCardContent";

const Main = () => {
    const result = false;
    return (
        <main className="mt-6">
            <div className="grid gap-6 lg:grid-cols-2 lg:gap-8">
                <div
                    id="docs-card"
                    className="flex h-[590px] items-start gap-6 overflow-hidden rounded-lg p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-black/[0.1] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#ffe863] md:row-span-3 lg:p-10 lg:pb-10 bg-[#f1f5f9]  dark:hover:text-black/70 dark:focus-visible:ring-[#ffe863]"
                >
                    <div className="absolute w-full flex items-center gap-6 lg:items-end">
                        <DocsCardContent />
                    </div>
                </div>
                {result ? (
                    <div className="flex flex-col h-full w-[800px]  items-start gap-6 overflow-hidden rounded-lg p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-black/[0.1] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#ffe863] md:row-span-3 lg:p-10 lg:pb-10 bg-[#f1f5f9] dark:hover:text-black/70 dark:focus-visible:ring-[#ffe863]">
                        <div className="pt-3 sm:pt-5 w-full">
                            <h2 className="text-base mb-6 font-semibold text-black dark:text-black">
                                Resultado da consulta:
                            </h2>
                            {infoLine.map((item, index) => {
                                return (
                                    <InfoLine
                                        key={index}
                                        title={item.title}
                                        value={item.value}
                                    />
                                );
                            })}
                        </div>

                        <div className="pt-3 sm:pt-5 w-full">
                            <h2 className="text-base mb-6 font-semibold text-black dark:text-black">
                                Parâmetros utilizados na consulta:
                            </h2>
                            {infoLineResult.map((item, index) => {
                                return (
                                    <InfoLine
                                        key={index}
                                        title={item.title}
                                        value={item.value}
                                    />
                                );
                            })}

                            <div className="flex mt-4 justify-between">
                                <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                                    Link:
                                </h2>
                                <h2 className="text-sm py-5 font-semibold text-black dark:text-blue-500">
                                    https://www.in.gov.br/en/web/dou/-/resolucao-n-6.034-de-18-de-janeiro-de-2024-538363035
                                </h2>
                            </div>
                        </div>
                    </div>
                ) : (
                    <div className="border-2 rounded-md justify-center mx-auto flex items-center h-[220px] w-[800px] border-dashed">
                        <h2 className="text-base mb-6 font-semibold text-black dark:text-black">
                            Preencha os campos ao lado para calcular o valor do
                            frete.
                        </h2>
                    </div>
                )}
            </div>
        </main>
    );
};

export default Main;
