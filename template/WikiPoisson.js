import React, { useState } from 'react';
import { View, StyleSheet, TouchableOpacity, Text } from 'react-native';
import App from '../App';

const WikiPoisson = () => {
    const [showWiki, setShowWiki] = useState(true);
    const [showMap, setShowMap] = useState(false);

    return (
        <View style={styles.container}>
            {showMap ? (
                <App />
            ) : (
                <View style={styles.contentContainer}>
                    <Text>Wiki des Poissons</Text>

                    <View style={styles.bottomCenterContainer}>
                        <TouchableOpacity
                            style={styles.button}
                            onPress={() => {
                                setShowMap(true);
                                setShowWiki(false);
                            }}
                        >
                            <Text style={styles.buttonText}>Map</Text>
                        </TouchableOpacity>

                        <TouchableOpacity
                            style={styles.button}
                            onPress={() => {
                                setShowWiki(true);
                                setShowMap(false);
                            }}
                        >
                            <Text style={styles.buttonText}>Wiki sur les poissons</Text>
                        </TouchableOpacity>
                    </View>
                </View>
            )}
        </View>
    );
};

const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    contentContainer: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
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

export default WikiPoisson;
