import React from "react";

const WelcomeSection = () => {
    return (
        <section>
            <h1 className="text-4xl font-bold text-black dark:text-black">
                Calculadora de frete
            </h1>
            <p className="mt-4 text-lg text-black dark:text-black">
                Use o simulador para cálculo dos pisos mínimos de frete com base
                na tabela da ANTT estabelecida pela Resolução abaixo.
            </p>
        </section>
    );
};

export default WelcomeSection;
