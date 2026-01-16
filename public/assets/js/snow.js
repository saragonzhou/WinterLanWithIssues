const snowContainer = document.createElement("div");
snowContainer.style.position = "fixed";
snowContainer.style.top = "0";
snowContainer.style.left = "0";
snowContainer.style.width = "100%";
snowContainer.style.height = "100%";
snowContainer.style.pointerEvents = "none";
document.body.appendChild(snowContainer);

function createSnow() {
    const snow = document.createElement("div");
    snow.classList.add("snowflake");
    snow.style.position = "absolute";
    snow.style.top = "-10px";
    snow.style.left = Math.random() * window.innerWidth + "px";
    snow.style.opacity = Math.random();
    snow.style.fontSize = Math.random() * 10 + 10 + "px";
    snow.innerHTML = "❄";
    snowContainer.appendChild(snow);

    setTimeout(() => snow.remove(), 8000);
}

setInterval(createSnow, 200);
