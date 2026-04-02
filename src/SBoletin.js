let currentPage = 1;

function fetchNews() {
    const search = document.getElementById("searchText").value;
    const month = document.getElementById("filterMonth").value;
    const year = document.getElementById("filterYear").value;

    const params = new URLSearchParams({
        search,
        month,
        year,
        page: currentPage
    });

    fetch(BASE_URL + "Backend/get_boletines.php?" + params.toString())
        .then(res => res.json())
        .then(data => {
            renderNews(data.news);
            renderPagination(data.pages, currentPage);
        });
}

function renderNews(news) {
    const container = document.getElementById("newsContainer");
    container.innerHTML = "";

    news.forEach(n => {
        const date = new Date(n.datenoti).toLocaleDateString("es-MX");

        const card = document.createElement("div");
        card.classList.add("news-card");

        //const imgPath = n.noticiaimg ? n.noticiaimg : "../panel/imgnoticia/banner ssp informa web jpg.jpg";

        card.innerHTML = `
            <a href="${BASE_URL}Docs?id_noticia=${n.id_noticia}"  target="_blank" rel="noopener">
                <img src="${BASE_URL}panel/imgnoticia/${n.noticiaimg}" alt="Imagen noticia" class="news-img">

                <div class="news-info">
                    <h3 style="text-transform: uppercase;" class="Russ" >${n.titulonoti}</h3>
                    <div class="Juramedium" style="color:#64748b !important; ">${n.datenoti}</div>

                    <p class="Juramedium" >
                        ${n.descrinoti.substr(0, 150)}...
                    </p>


                </div>
            </a>

           
           
        `;
        container.appendChild(card);
    });
}

/* ================================
   NUEVO PAGINADOR AVANZADO
   ================================ */
function renderPagination(totalPages, current) {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = "";

    // Helper para crear botón
    function addButton(page, text = page, disabled = false) {
        const btn = document.createElement("button");
        btn.textContent = text;

        if (page === current) btn.classList.add("active");
        if (disabled) btn.disabled = true;

        btn.addEventListener("click", () => {
            if (page !== current && !disabled) {
                currentPage = page;
                fetchNews();
            }
        });

        pagination.appendChild(btn);
    }

    /* ⬅ Flecha Anterior */
    addButton(
        current - 1,
        "←",
        current === 1
    );

    /* Primeras 3 páginas */
    const firstSection = Math.min(3, totalPages);
    for (let i = 1; i <= firstSection; i++) {
        addButton(i);
    }

    /* Puntos si aplica */
    if (current > 4 && totalPages > 6) {
        const dots = document.createElement("span");
        
        dots.classList.add("dots");
        pagination.appendChild(dots);
    }

    /* Página actual en medio */
    if (current > 3 && current < totalPages - 2) {
        addButton(current);

        const dots2 = document.createElement("span");
       
        dots2.classList.add("dots");
        pagination.appendChild(dots2);
    }

    /* Últimas 2 páginas */
    if (totalPages > 3) {
        for (let i = totalPages - 1; i <= totalPages; i++) {
            if (i > 3) addButton(i);
        }
    }

    /* ➡ Flecha Siguiente */
    addButton(
        current + 1,
        "→",
        current === totalPages
    );
}

/* ================================
   EVENTOS DE FILTROS
   ================================ */
   
document.getElementById("searchText").addEventListener("input", () => {
    currentPage = 1;
    fetchNews();
});

document.getElementById("filterMonth").addEventListener("change", () => {
    currentPage = 1;
    fetchNews();
});

document.getElementById("filterYear").addEventListener("change", () => {
    currentPage = 1;
    fetchNews();
});

fetchNews();
