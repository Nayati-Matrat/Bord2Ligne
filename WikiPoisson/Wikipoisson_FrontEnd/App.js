import React, { useEffect, useState } from 'react';
import { StyleSheet, Text, View } from 'react-native';

export default function App() {
  const [donnees, setDonnees] = useState([]);

  useEffect(() => {
    fetch('http://localhost:8000/donnees/')
      .then(response => response.json())
      .then(data => setDonnees(data))
      .catch(error => console.error(error));
  }, []);

  return (
    <View style={styles.container}>
      <Text>Liste des données :</Text>
      {donnees.map((item, index) => (
        <Text key={index}>{item.champ1} - {item.champ2}</Text>
      ))}
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
