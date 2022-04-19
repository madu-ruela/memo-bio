
const btnDados = document.querySelector(".btnDados")
const btnEnd = document.querySelector(".btnEndereco")
const formDados = document.querySelector(".dadosPessoais")
const formEndereco = document.querySelector(".dadosEndereco")

function toggleForm() {
}


btnDados.addEventListener("click", () => {
	//console.log("dados")
	btnDados.classList.add('active')
	btnEnd.classList.remove('active')

	formEndereco.classList.remove('active')
	formDados.classList.add('active')

	toggleForm()
})
btnEnd.addEventListener("click", () => {
	//console.log("endereco")
	toggleForm()
	btnDados.classList.remove('active')
	btnEnd.classList.add('active')
	formEndereco.classList.add('active')
	formDados.classList.remove('active')
})