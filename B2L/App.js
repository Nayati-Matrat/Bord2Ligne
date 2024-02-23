import React from 'react';
import {View, Text, Image, ScrollView, TextInput} from 'react-native';

const App = () => {
  return (
    <ScrollView>
      <Text>Some text</Text>
      <View>
        <Text>Some more text</Text>
        <Image
          source={require('./IMAGES/oui.png')}
          style={{width: 200, height: 200}}
        />
      </View>
      <TextInput
        style={{
          height: 40,
          borderColor: 'red',
          borderWidth: 4,
          textAlign: 'center',
        }}
        defaultValue="enter text here"
      />
    </ScrollView>
  );
};

export default App;