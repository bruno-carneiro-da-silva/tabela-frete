import React from "react";
import InputLabel from "../InputLabel";
import CustomDropdown from "../CustomDropdown/CustomDropdown";
import TextInput from "../TextInput";
import PrimaryButton from "../PrimaryButton";

const DocsCardContent = () => {
    return (
        <div
            id="docs-card-content"
            className="flex items-start gap-6 lg:flex-col"
        >
            <InputLabel
                htmlFor="teste"
                className="text-[#374151]"
                value="Tipo de carga:"
            />
            <CustomDropdown
                triggerText="Conteudo"
                link1={{
                    route: "profile.edit",
                    text: "Perfil",
                }}
                link2={{
                    route: "logout",
                    text: "Sair",
                }}
            />
            <InputLabel
                htmlFor="teste"
                className="text-[#374151]"
                value="Tipo de carga:"
            />
            <CustomDropdown
                triggerText="Carga de ferro"
                link1={{
                    route: "profile.edit",
                    text: "Perfil",
                }}
                link2={{
                    route: "logout",
                    text: "Sair",
                }}
            />
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
                <CustomDropdown
                    short={true}
                    triggerText="Carga de ferro"
                    link1={{
                        route: "profile.edit",
                        text: "Perfil",
                    }}
                    link2={{
                        route: "logout",
                        text: "Sair",
                    }}
                />
                <CustomDropdown
                    short={true}
                    triggerText="7"
                    link1={{
                        route: "profile.edit",
                        text: "Perfil",
                    }}
                    link2={{
                        route: "logout",
                        text: "Sair",
                    }}
                />
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
                className="w-full border border-spacing-1 text-black border-gray-400 h-[49px]"
                placeholder="3000"
            />
            <PrimaryButton
                type="submit"
                className="w-full h-[50px] text-center font-bold size-4 justify-center"
            >
                Calcular valor do frete
            </PrimaryButton>
        </div>
    );
};

export default DocsCardContent;
