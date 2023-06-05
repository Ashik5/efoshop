const filterSection = document.getElementsByClassName("filter-single-section");
const hidingLength = 3;
for (let i = 0; i < filterSection.length; i++) {
    const inputs = filterSection[i].getElementsByTagName("input");
    const labels = filterSection[i].getElementsByTagName("label");
    const br = filterSection[i].getElementsByTagName("br");
    if (inputs.length > hidingLength) {
        for (let j = hidingLength; j < inputs.length; j++) {
            inputs[j].setAttribute("style", "display:none");
            labels[j].setAttribute("style", "display:none");
            br[j].setAttribute("style", "display:none");
        }
        const lastElement = filterSection[i].getElementsByTagName("br");
        lastElement[lastElement.length - 1].insertAdjacentHTML("afterend", "<span class=expand>view more</span>");
        const expand = filterSection[i].getElementsByClassName("expand");
        expand[0].addEventListener("click", (e) => {
            if (getComputedStyle(inputs[hidingLength]).display == "none") {
                for (let j = hidingLength; j < inputs.length; j++) {
                    inputs[j].setAttribute("style", "display:inline-block");
                    labels[j].setAttribute("style", "display:inline-block");
                    br[j].setAttribute("style", "display:inline-block");
                    expand[0].innerText="view less";
                }
            }
            else {
                for (let j = hidingLength; j < inputs.length; j++) {
                    inputs[j].setAttribute("style", "display:none");
                    labels[j].setAttribute("style", "display:none");
                    br[j].setAttribute("style", "display:none");
                    expand[0].innerText="view more";
                }
            }
        })

    }
}
// ----------------------- Mobile menu functions --------------------//
const filterOpen = document.getElementsByClassName("efoshop-mobile-filter-button");
const closeFilterBtn = document.getElementsByClassName("close-filter");
const mobileFilterSection = document.getElementsByClassName("efoshop-filter-section");

filterOpen[0].addEventListener("click",(e)=>{
    mobileFilterSection[0].setAttribute("style","display:block");
})
closeFilterBtn[0].addEventListener("click",(e)=>{
    mobileFilterSection[0].setAttribute("style","display:none");
})