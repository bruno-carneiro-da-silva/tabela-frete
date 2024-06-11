import React from "react";

const InfoLine = ({ title, value }) => (
    <>
        <div className="flex mt-4 justify-between">
            <h2 className="text-base py-4 font-semibold text-black dark:text-black">
                {title}
            </h2>
            <h2 className="text-xl py-4 font-semibold text-black dark:text-gray-500">
                {value}
            </h2>
        </div>
        <hr className="w-full border border-spacing-1 border-dashed border-gray-200" />
    </>
);

export default InfoLine;
