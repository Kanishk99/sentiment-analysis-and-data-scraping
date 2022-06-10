#!/usr/bin/env python
# coding: utf-8

import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import re
import nltk
from nltk.corpus import stopwords
from nltk.stem.porter import PorterStemmer
from sklearn.feature_extraction.text import CountVectorizer
import pickle
import joblib

dataset = pd.read_csv('dm\sentiment_analysis\output_fresh_dump.csv')

nltk.download('stopwords')

ps = PorterStemmer()

all_stopwords = stopwords.words('english')
all_stopwords.remove('not')
corpus=[]

for i in range(0, dataset.shape[0]):
  review = re.sub('[^a-zA-Z]', ' ', dataset['Comment'][i])
  review = review.lower()
  review = review.split()
  review = [ps.stem(word) for word in review if not word in set(all_stopwords)]
  review = ' '.join(review)
  corpus.append(review)


cvFile='dm\sentiment_analysis\c1_BoW_Sentiment_Model.pkl'
# cv = CountVectorizer(decode_error="replace", vocabulary=pickle.load(open('./drive/MyDrive/Colab Notebooks/2 Sentiment Analysis (Basic)/3.1 BoW_Sentiment Model.pkl', "rb")))
cv = pickle.load(open(cvFile, "rb"))

X_fresh = cv.transform(corpus).toarray()
X_fresh.shape


classifier = joblib.load('dm\sentiment_analysis\c2_Classifier_Sentiment_Model')

y_pred = classifier.predict(X_fresh)
f = open("dm\sentiment_analysis\mySentiment.txt",'w')
test =str(y_pred[0])
f.write(test)
f.close()

dataset['predicted_label'] = y_pred.tolist()
dataset.to_csv("dm\sentiment_analysis\c3_Predicted_Sentiments_Fresh_Dump.csv", sep='\t', encoding='UTF-8', index=False)






