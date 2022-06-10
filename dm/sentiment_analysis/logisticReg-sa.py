#!/usr/bin/env python
# coding: utf-8

import joblib
import nltk
from nltk.corpus import stopwords
from nltk.stem.porter import PorterStemmer
import re
import numpy as np
import pandas as pd
from sklearn.metrics import accuracy_score
from sklearn.feature_extraction.text import CountVectorizer
import pickle
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression

dataset = pd.read_csv('dm\sentiment_analysis\output.csv')
#dataset.shapedataset.head()


nltk.download('stopwords')


ps = PorterStemmer()

all_stopwords = stopwords.words('english')
all_stopwords.remove('not')
corpus=[]

for i in range(0, dataset.shape[0]):
  review = re.sub('[^a-zA-Z]', ' ', str(dataset['Comment'][i]))
  review = review.lower()
  review = review.split()
  review = [ps.stem(word) for word in review if not word in set(all_stopwords)]
  review = ' '.join(review)
  corpus.append(review)


cv = CountVectorizer(max_features = 1420)
def sentiment(n):
    return 1 if n >= 4 else 0
dataset['sentiment'] = dataset['Rating'].apply(sentiment)
dataset.head()
X = cv.fit_transform(corpus).toarray()
#y = dataset.iloc[:, -1].values
y = dataset['sentiment']
#y = dataset.iloc[:, 0].values



bow_path = 'dm\sentiment_analysis\c1_BoW_Sentiment_Model.pkl'
pickle.dump(cv, open(bow_path, "wb"))


X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.20, random_state = 0)#from sklearn.naive_bayes import GaussianNB
#classifier = GaussianNB()
#classifier.fit(X_train, y_train)X_testy_testfrom sklearn.linear_model import LogisticRegression
classifier = LogisticRegression(max_iter=10000 )
classifier.fit(X_train, y_train)

joblib.dump(classifier, 'dm\sentiment_analysis\c2_Classifier_Sentiment_Model') 
y_pred = classifier.predict(X_test)

#cm

accuracy_score(y_test, y_pred)

