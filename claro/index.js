const APP_ID = '4090239d69cdb3874de692fd18539299';

const fetchData = position => {
    const { latitude, longitude } = position.coords;
    fetch(`http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&units=metric&appid=${APP_ID}`)
        .then(response => response.json())
        .then(data => setWeatherData(data));
}

const setWeatherData = data => {
    console.log(data);
    const weatherData = {
       
        temperature: data.main.temp,
        
    }

    Object.keys(weatherData).forEach( key => {
        document.getElementById(key).textContent = weatherData[key];
    });

}


const onLoad = () => {
    navigator.geolocation.getCurrentPosition(fetchData)
}
