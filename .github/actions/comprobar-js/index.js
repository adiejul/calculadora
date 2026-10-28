const fs = require("fs");

const archivos = ["README.md", "LICENSE", "CONTRIBUTING.md"];
let faltan = 0;

for (const archivo of archivos) {
    if (fs.existsSync(archivo)) {
        console.log(`OK: ${archivo} existe`);
    } else {
        console.log(`::error::Falta ${archivo}`);
        faltan++;
    }
}

if (faltan > 0) {
    process.exit(1);
}