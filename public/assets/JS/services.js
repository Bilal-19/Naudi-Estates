const serviceEl = document.getElementById("services")

const professionalServices = [
    {
        serviceID: 1,
        serviceName: "Tenant sourcing & vetting",
        serviceImage: "tenant.png",
        additionalClass: ""
    },
    {
        serviceID: 2,
        serviceName: "Rent collection & financial reporting",
        serviceImage: "rent.png",
        additionalClass: ""
    },
    {
        serviceID: 3,
        serviceName: "Maintenance & repairs coordination",
        serviceImage: "repairs.png",
        additionalClass: ""
    },
    {
        serviceID: 4,
        serviceName: "Property inspections & compliance",
        serviceImage: "inspection.png",
        additionalClass: ""
    },
    {
        serviceID: 5,
        serviceName: "Legal and lease management",
        serviceImage: "agreement.png",
        additionalClass: "md:col-span-2"
    }
]

professionalServices.map((val, key) => {
    serviceEl.innerHTML +=
        `
    <div class="col-span-1 ${val.additionalClass} m-10 md:m-0">
        <img src="assets/Services/${val.serviceImage}" class="rounded-xl" alt="${val.serviceName}"/>
        <p class="text-base md:text-[25px]">${val.serviceName}</p>
    </div>
    `
})


const audienceEl = document.getElementById("potentialAudience")
const audienceArr = [
    {
        id: 1,
        category: "Expats with property in Malta",
        imagePath: "MaltaProperty.png"
    },
    {
        id: 2,
        category: "Inherited property owners",
        imagePath: "Caretaker.png"
    },
    {
        id: 3,
        category: "Busy professionals",
        imagePath: "Businessman.png"
    },
    {
        id: 4,
        category: "Investors seeking passive income",
        imagePath: "Investor.png"
    },
    {
        id: 5,
        category: "Developers offloading rental units",
        imagePath: "Agent.png"
    }
]


audienceArr.map((val, key) => {
    audienceEl.innerHTML +=
        `
    <div class="text-center w-80 md:w-1/6">
        <img src="assets/Services/Icons/${val.imagePath}" class="mx-auto md:mb-3 h-15 md:h-[75px]" alt="${val.category}">
        <p class="font-light text-md md:text-xl">${val.category}</p>
    </div>
    `
})
