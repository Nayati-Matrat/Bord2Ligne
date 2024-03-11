import React, { useEffect, useState } from 'react';
import { View, StyleSheet, TouchableOpacity, Text, WebView } from 'react-native';
import MapView, { Marker } from 'react-native-maps';

const App = () => {
  const initialRegion = {
    latitude: 43.2326,
    longitude: 0.083,
    latitudeDelta: 0.0922,
    longitudeDelta: 0.0421,
    //initialisation de la carte sur la ville de Tarbes
  };

  const [markers, setMarkers] = useState([]);
  const [userLocation, setUserLocation] = useState(null);
  const [showJournal, setShowJournal] = useState(false);
  const [showWiki, setShowWiki] = useState(false);
  const [weather, setWeather] = useState(null);

  useEffect(() => {
    const getUserLocation = () => {
      if ('geolocation' in navigator) {
        navigator.geolocation.getCurrentPosition(
          position => {
            const { latitude, longitude } = position.coords;
            setUserLocation({ latitude, longitude });
            fetchWeather(latitude, longitude);
          },
          error => console.log(error.message),
          { enableHighAccuracy: true, timeout: 20000, maximumAge: 1000 }
        );
      } else {
        console.log('La géolocalisation n\'est pas disponible sur cet appareil.');
      }
    };

    getUserLocation();
  }, []);

  const fetchWeather = async (latitude, longitude) => {
    const API_KEY = '3f0c2ada15ca8d9efe8db3bb97ac5373' ; // Remplacez par votre propre clé API OpenWeatherMap
    const url = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${API_KEY}&units=metric`;
    try {
      const response = await fetch(url);
      const data = await response.json();
      setWeather(data);
    } catch (error) {
      console.error('Erreur lors de la récupération des données météo:', error);
    }
  };

  const handleMapPress = (event) => {
    const { coordinate } = event.nativeEvent;
    setMarkers([...markers, coordinate]);
  };

  return (
    <View style={styles.container}>
      <MapView
        style={styles.map}
        initialRegion={initialRegion}
        onPress={handleMapPress}
      >
        {markers.map((marker, index) => (
          <Marker
            key={index}
            coordinate={marker}
            title={`Lieu ${index + 1}`}
          />
        ))}
        {userLocation && (
          <Marker
            coordinate={userLocation}
            title="Votre position"
            pinColor="blue"
          />
        )}
      </MapView>

      {showJournal && (
        <WebView
          style={styles.webview}
          source={{ uri: 'https://www.comite-peches.fr/mise-a-jour-du-journal-de-peche-electronique/' }}
        />
      )}

      {showWiki && (
        <WebView
          style={styles.webview}
          source={{ uri: 'https://fr.wikipedia.org/wiki/Poisson' }}
        />
      )}

      {weather && (
        <View style={styles.weatherContainer}>
          <Text style={styles.weatherText}>Température: {weather.main.temp}°C</Text>
          <Text style={styles.weatherText}>Humidité: {weather.main.humidity}%</Text>
          <Text style={styles.weatherText}>Conditions: {weather.weather[0].description}</Text>
        </View>
      )}

      <View style={styles.bottomCenterContainer}>
        {/* Bouton pour accéder au journal de bord */}
        <TouchableOpacity
          style={styles.button}
          onPress={() => setShowJournal(!showJournal)}
        >
          <Text style={styles.buttonText}>Journal de bord</Text>
        </TouchableOpacity>

        {/* Bouton pour accéder au wiki sur les poissons */}
        <TouchableOpacity
          style={styles.button}
          onPress={() => setShowWiki(!showWiki)}
        >
          <Text style={styles.buttonText}>Wiki sur les poissons</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  map: {
    flex: 1,
  },
  button: {
    backgroundColor: 'rgba(0, 0, 0, 0.7)',
    paddingVertical: 12,
    paddingHorizontal: 24,
    borderRadius: 6,
    marginBottom: 10,
  },
  buttonText: {
    color: 'white',
    fontSize: 16,
  },
  bottomCenterContainer: {
    position: 'absolute',
    bottom: 20,
    left: 0,
    right: 0,
    alignItems: 'center',
  },
  webview: {
    flex: 1,
  },
  weatherContainer: {
    position: 'absolute',
    top: 20,
    left: 20,
    backgroundColor: 'rgba(255, 255, 255, 0.8)',
    padding: 10,
    borderRadius: 6,
  },
  weatherText: {
    fontSize: 16,
  },
});

export default App;
