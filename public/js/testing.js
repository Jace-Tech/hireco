const storeBrowserInfo = async (url, browser) => {
    const formData = new FormData()
    formData.append("browser", browser)

    const option = {
        method: "Post",
        body: formData
    }

    const request = await fetch(url, option)
    const response = await request.json()

    return response
}


window.onload = async () => {
    const url = "link to your backend file"
    const browserInfo = navigator.appVersion
    const result = await storeBrowserInfo(url, browser)
}