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
        load_type: null,
        number_of_axles: "",
        distance: "",
    });

    const handleOptionSelected = (name, option) => {
        setData(name, option);
    };

    const hadleSubmit = (e) => {
        e.preventDefault();
        console.log("data", data);
        post(route("calculate"), {
            resolution: data.resolution, // Ajuste para enviar a ID da resolução corretamente
            load_type: data.load_type, // Ajuste para enviar o tipo de carga corretamente
            number_of_axles: data.number_of_axles,
            distance: data.distance,
        }).then((res) => {
                console.log("Response from backend:", response);
        }).catch((error) => {
                console.error("Error:", error);
        });
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
                    options={["18/01/2024, Resolução Nº 6.034 (atual)"]}
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
                        htmlFor="load_type"
                        className="text-[#374151]"
                        value="Tipo de carga:"
                    />
                    <InputLabel
                        htmlFor="number_of_axles"
                        className="text-[#374151]"
                        value="Num. eixos:"
                    />
                    <CustomDropdown
                        short={true}
                        name="load_type"
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
                    <InputError message={errors.load_type} className="mt-2" />

                    <CustomDropdown
                        short={true}
                        name="number_of_axles"
                        options={["2", "3", "4", "5", "6", "7", "9"]}
                        onOptionSelected={(option) =>
                            handleOptionSelected("count_axies", option)
                        }
                    />
                    <InputError
                        message={errors.number_of_axles}
                        className="mt-2"
                    />
                </div>
                <InputLabel
                    htmlFor="distance"
                    className="text-[#374151]"
                    value="Distância(KM)"
                />
                <TextInput
                    type="text"
                    name="distance"
                    id="distance"
                    className="w-full border border-spacing-1 text-black border-gray-400 h-[49px]"
                    placeholder="3000"
                    value={data.distance}
                    onChange={(e) => setData("distance", e.target.value)}
                />
                <InputError message={errors.distance} className="mt-2" />

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
