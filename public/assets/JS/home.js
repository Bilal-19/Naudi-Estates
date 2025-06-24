const userBenefits = [
    {
        id: 1,
        imagePath: "SecurityGuard.png",
        imageDesc: "Security Guard",
        description: "Management of tenants (including greeting and checking-in)"
    },
    {
        id: 2,
        imagePath: "Janitor.png",
        imageDesc: "Janitor",
        description: "Engagement of cleaning, laundry and maintenance services"
    },
    {
        id: 1,
        imagePath: "SecurityGuard.png",
        imageDesc: "Security Guard",
        description: "Management of tenants (including greeting and checking-in)"
    },
    {
        id: 1,
        imagePath: "SecurityGuard.png",
        imageDesc: "Security Guard",
        description: "Management of tenants (including greeting and checking-in)"
    },
    {
        id: 1,
        imagePath: "SecurityGuard.png",
        imageDesc: "Security Guard",
        description: "Management of tenants (including greeting and checking-in)"
    }
]


const userBenefitsEl = document.getElementById("userBenefits")


userBenefits.map((val, key) => {
    userBenefitsEl.innerHTML +=
        `
        <div class="bg-white rounded-xl border-b-5 border-[#C9A578] p-3 text-center m-5">
            <img src="assets/Home/Icons/${val.imagePath}" alt="${val.imageDesc}" class="mx-auto h-15">
            <p class="font-light text-xl">${val.description}</p>
        </div>
    `
})
