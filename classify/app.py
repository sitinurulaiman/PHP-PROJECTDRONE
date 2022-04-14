import streamlit as st

import tensorflow as tf
model = tf.keras.models.load_model('model.h5')
st.set_page_config(page_title='AgriDrone', page_icon = '/images/favicon.ico', initial_sidebar_state = 'auto')
st.title(
         "AgriDrone"
         
         )
st.write("Simple Demonstration")
file = st.file_uploader("Please upload an image file", type=["jpg", "png"])

st.write(f'''
    <a target="_self" href="http://localhost/agri/home.php">
        <button>
            HOME
        </button>
    </a>
    ''',
    unsafe_allow_html=True
)

# link = '[HOME]http://192.168.43.8/agri/'
# st.markdown(link, unsafe_allow_html=True)

import cv2
from PIL import Image, ImageOps
import numpy as np
def import_and_predict(image_data, model):
    
        size = (50,50)    
        image = ImageOps.fit(image_data, size, Image.ANTIALIAS)
        image = np.asarray(image)
        img = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
        img_resize = (cv2.resize(img, dsize=(100, 100),    interpolation=cv2.INTER_CUBIC))/255.
        
        img_reshape = img_resize[np.newaxis,...]
    
        prediction = model.predict(img_reshape)
        
        return prediction
if file is None:
    st.text("Please upload an image file")
else:
    image = Image.open(file)
    st.image(image, use_column_width=True)
    prediction = import_and_predict(image, model)
    
    if np.argmax(prediction) == 0:
        st.write("It is Blight")
    elif np.argmax(prediction) == 1:
        st.write("It is Healthy")
    elif np.argmax(prediction) == 2:
        st.write("It is Common Rust")
    else:
        st.write("It is Gray Leaf Spot!")
        
    st.write("0 = Blight 1 = Healthy 2 = Common Rust 3 = Gray Leaf Spot")    
    st.write(prediction)

