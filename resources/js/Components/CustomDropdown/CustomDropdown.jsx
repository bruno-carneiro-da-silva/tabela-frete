import React, { useState } from "react";
import Dropdown from "@/Components/Dropdown";
import TriggerButton from "@/Components/TriggerButton/TriggerButton";
import TriggerButtonShort from "@/Components/TriggerButton/TriggerButtonShort";

const CustomDropdown = ({ onOptionSelected, options, short }) => {
    const [selectedOption, setSelectedOption] = useState(null);

    const handleOptionClick = (option) => {
        setSelectedOption(option);
        onOptionSelected(option);
    };
    return (
        <Dropdown>
            {short ? (
                <>
                    <Dropdown.Trigger>
                        <TriggerButtonShort text={selectedOption} />
                    </Dropdown.Trigger>
                    <Dropdown.Content>
                        {options &&
                            options.map((option) => (
                                <div
                                    key={option}
                                    onClick={() => handleOptionClick(option)}
                                >
                                    {option}
                                </div>
                            ))}
                    </Dropdown.Content>
                </>
            ) : (
                <>
                    <Dropdown.Trigger>
                        <TriggerButton text={selectedOption} />
                    </Dropdown.Trigger>
                    <Dropdown.Content>
                        {options &&
                            options.map((option) => (
                                <div
                                    key={option}
                                    onClick={() => handleOptionClick(option)}
                                >
                                    {option}
                                </div>
                            ))}
                    </Dropdown.Content>
                </>
            )}
        </Dropdown>
    );
};
export default CustomDropdown;
