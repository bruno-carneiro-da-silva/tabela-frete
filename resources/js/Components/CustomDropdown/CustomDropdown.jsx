import React from "react";
import Dropdown from "@/Components/Dropdown";
import TriggerButton from "@/Components/TriggerButton/TriggerButton";
import TriggerButtonShort from "@/Components/TriggerButton/TriggerButtonShort";

const CustomDropdown = ({ triggerText, link1, link2, short }) => (
    <Dropdown>
        {short ? (
            <Dropdown.Trigger>
                <TriggerButtonShort text={triggerText} />
            </Dropdown.Trigger>
        ) : (
            <Dropdown.Trigger>
                <TriggerButton text={triggerText} />
            </Dropdown.Trigger>
        )}
        <Dropdown.Content>
            <Dropdown.Link href={route(link1.route)}>
                {link1.text}
            </Dropdown.Link>
            <Dropdown.Link href={route(link2.route)} method="post" as="button">
                {link2.text}
            </Dropdown.Link>
        </Dropdown.Content>
    </Dropdown>
);
export default CustomDropdown;
