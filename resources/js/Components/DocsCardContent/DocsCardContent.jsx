import React, { useState } from "react";
import InputLabel from "../InputLabel";
import CustomDropdown from "@/Components/CustomDropdown/CustomDropdown";
import TextInput from "@/Components/TextInput";
import PrimaryButton from "@/Components/PrimaryButton";
import InputError from "@/Components/InputError";
import { useForm } from "@inertiajs/react";

const DocsCardContent = () => {
    const { data, setData, post, processing, errors, reset } = useForm({
        resolution: null,
        cargo_category: null,
        cargo_type: null,
        count_axies: null,
        kilometers: "",
        // Adicione aqui outros campos do formulário se necessário
    });

    const handleOptionSelected = (name, option) => {
        setData(name, option);
    };

    const hadleSubmit = (e) => {
        e.preventDefault();
        console.log("data", data);
        // Aqui você pode fazer a chamada para a API
        // post(route("calculate-freight"));
    };
    return (
        <form onSubmit={hadleSubmit}>
            <div
                id="docs-card-content"
                className="flex items-start gap-6 lg:flex-col"
            >
                <InputLabel
                    htmlFor="resolution"
                    className="text-[#374151]"
                    value="Resolução/Portaria:"
                />
                <CustomDropdown
                    triggerText="Conteudo"
                    name="resolution"
                    options={[
                        "18/01/2024, Resolução Nº 6.034 (atual)",
                        "28/08/2023, Portaria Nº 20",
                        "21/08/2023, Portaria Nº 19",
                        "20/07/2023, Resolução Nº 6.022",
                        "05/06/2023, Portaria Nº 13",
                        "22/05/2023, Portaria Nº 11",
                        "25/04/2023, Portaria Nº 8",
                        "17/02/2023, Portaria Nº 5",
                        "19/01/2023, Resolução Nº 6.006 ",
                        "03/10/2022, Portaria SUROC nº 219",
                        "22/08/2022, Portaria Nº 214",
                        "20/07/2022, Resolução Nº 5.985",
                        "24/06/2022, Portaria Nº 210",
                        "18/03/2022, Portaria Nº 169",
                        "21/01/2022, Resolução Nº 5.959",
                        "21/10/2021, Portaria Nº 496",
                        "14/07/2021, Resolução Nº 5.949",
                        "03/03/2021, Portaria Nº 90",
                        "18/01/2021, Resolução Nº 5.923",
                        "03/11/2020, Portaria Nº 399",
                        "14/07/2020, Resolução Nº 5.899",
                        "26/05/2020, Resolução Nº 5.890",
                        "14/01/2020, Resolução Nº 5.867",
                    ]}
                    onOptionSelected={(option) =>
                        handleOptionSelected("resolution", option)
                    }
                />
                <InputError message={errors.resolution} className="mt-2" />
                <InputLabel
                    htmlFor="cargo_category"
                    className="text-[#374151]"
                    value="Categoria do transporte:"
                />
                <CustomDropdown
                    triggerText="Carga de ferro"
                    name="cargo_category"
                    options={[
                        "Carga lotação",
                        "Operações em que haja a contratação apenas do veículo automotor de cargas",
                        "Transporte rodoviário de carga lotação de alto desempenho",
                        "Operações em que haja a contratação apenas do veículo automotor de cargas de alto desempenho",
                    ]}
                    onOptionSelected={(option) =>
                        handleOptionSelected("cargo_category", option)
                    }
                />
                <InputError message={errors.cargo_category} className="mt-2" />

                <div className="grid gap-6 lg:grid-cols-2  justify-between">
                    <InputLabel
                        htmlFor="cargo_type"
                        className="text-[#374151]"
                        value="Tipo de carga:"
                    />
                    <InputLabel
                        htmlFor="count_axies"
                        className="text-[#374151]"
                        value="Num. eixos:"
                    />
                    <CustomDropdown
                        short={true}
                        name="cargo_type"
                        options={[
                            "Granel sólido",
                            "Granel líquido",
                            "Frigorificada",
                            "Conteinerizada",
                            "Carga Geral",
                            "Neogranel",
                            "Perigosa (granel sólido)",
                            "Perigosa (granel líquido)",
                            "Perigosa (carga frigorificada)",
                            "Perigosa (conteinerizada)",
                            "Perigosa (carga geral)",
                            "Carga Granel Pressurizada",
                        ]}
                        onOptionSelected={(option) =>
                            handleOptionSelected("cargo_type", option)
                        }
                    />
                    <InputError message={errors.cargo_type} className="mt-2" />

                    <CustomDropdown
                        short={true}
                        name="count_axies"
                        options={["2", "3", "4", "5", "6", "7", "9"]}
                        onOptionSelected={(option) =>
                            handleOptionSelected("count_axies", option)
                        }
                    />
                    <InputError message={errors.count_axies} className="mt-2" />
                </div>
                <InputLabel
                    htmlFor="kilometers"
                    className="text-[#374151]"
                    value="Distância(KM)"
                />
                <TextInput
                    type="text"
                    name="kilometers"
                    id="kilometers"
                    className="w-full border border-spacing-1 text-black border-gray-400 h-[49px]"
                    placeholder="3000"
                    value={data.kilometers}
                    onChange={(e) => setData("kilometers", e.target.value)}
                />
                <InputError message={errors.kilometers} className="mt-2" />

                <PrimaryButton
                    type="submit"
                    disabled={processing}
                    className="w-full h-[50px] text-center font-bold size-4 justify-center"
                >
                    Calcular valor do frete
                </PrimaryButton>
            </div>
        </form>
    );
};

export default DocsCardContent;
