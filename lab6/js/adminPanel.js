import { showError, removeError } from './errors.js';

const form = document.forms.sendForm;
const { Title, Description, Author, AuthorPhoto, HeroImage, HeroImageSec, Content, PublishDate } = form;

const articleTitle = document.querySelector('.screen-text-title');
const articleSubtitle = document.querySelector('.screen-text-subtitle');
const previewTitle = document.querySelector('.post-preview__title');
const previewSubtitle = document.querySelector('.post-preview__subtitle');
const authorName = document.querySelector('.post-preview__author-text');
const previewDate = document.querySelector('.post-preview__author-date');
const BtnsRemoveImgs = document.querySelectorAll('.changeImg-remove');

const ImgNames = [
  ['.author-img-output', '.preview__author-image'],
  ['.HeroImage-output', '.screen-text-image-output', '.HeroImage-output-sec', '.post-preview__image-output'],
];
const noneImgNames = [
  ['.none-author-img'], ['.none-HeroImage', '.none-HeroImage-sec', '.Upload-HeroImage-sec', '.Upload-HeroImage'],
];

(function() {
  const date = new Date().toJSON().slice(0, 10);
  PublishDate.value = date;
  PublishDate.max = date;
  previewDate.innerHTML = new Date().toLocaleDateString();
})();

(function() {
  const accontFirstLetter = document.querySelector('.get-elems').dataset.email.toUpperCase();
  const accontFirstLetterElement = document.querySelector('.account-first-name');
  accontFirstLetterElement.innerHTML = accontFirstLetter;
})();

function changeElems(elems, value) {
  elems.forEach(el => el.innerHTML = value);
}

function isErrorText(text) {
  return !text.value.trim();
}

function ChangePreview(e) {
  const value = e.target.value;
  switch (e.target.id) {
    case 'Title':
      changeElems([articleTitle, previewTitle], value); break;
    case 'Description':
      changeElems([articleSubtitle, previewSubtitle], value); break;
    case 'Author':
      changeElems([authorName], value); break;
    case "PublishDate":
      changeElems([previewDate], new Date(value).toLocaleDateString()); break;
  }
}

function changeImage(e, ImgNames, noneImgNames) {
  const changeEl = e.target.id === 'AuthorPhoto' ? 0 : 1;
  const AllNames = ImgNames[changeEl];
  AllNames.forEach(ImgName => {
    const Img = document.querySelector(ImgName);
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        Img.src = reader.result;
        Img.style.width = '100%';
        Img.style.height = '100%';
      }, false
    );
    file && reader.readAsDataURL(file);
    if (AllNames.length <= 2) Img.style.borderRadius = '50%';
    else if (ImgName === '.HeroImage-output' || ImgName === '.HeroImage-output-sec') Img.style.borderRadius = '4px';
  });
  noneImgNames[changeEl].forEach(noneImgName => document.querySelector(noneImgName).style.display = 'none');
}

function AddingBtns(mainChange, additionalChange) {
  const additionalElems = document.querySelectorAll(additionalChange);
  const showChangeElems = document.querySelectorAll(mainChange)
  additionalElems.forEach(el => el.style.display = 'none');
  showChangeElems.forEach(el => el.style.display = 'flex');
}

function ShowImages(e) {
  const curId = e.target.id;
  if (curId === "AuthorPhoto") AddingBtns('.changeImg-author', '.author-upload');
  else if (curId === "HeroImage" || curId === 'HeroImageSec') AddingBtns('.changeImg', '.HeroImage-size');
  changeImage(e, ImgNames, noneImgNames);
}

function removeImages(e) {
  const classes = e.currentTarget.classList.value;
  const isAuthorImgs = Number(!classes.includes('changeImg-author__remove'));
  ImgNames[isAuthorImgs].forEach(el => {
    const curImg = document.querySelector(el);
    curImg.style.removeProperty("width");
    curImg.style.removeProperty("height");
    curImg.src = 'data:,';
  });

  if (classes.includes('changeImg-author__remove')) {
    document.querySelector('.author-upload').style.display = 'block';
    document.querySelector('.none-author-img').style.display = 'block';
    e.currentTarget.closest('.changeImg-author').style.display = 'none';
  } else {
    noneImgNames[1].forEach(el => document.querySelector(el).style.display = 'block');
    document.querySelectorAll('.changeImg').forEach(el => el.style.display = 'none');
    document.querySelectorAll('.HeroImage-size').forEach(el => el.style.display = 'block');
  }
}

function checkInputs(e) {
  e.preventDefault();
  const mainImg = document.querySelector(ImgNames[0][0]);
  const authorImg = document.querySelector(ImgNames[1][0]);
  const errorSubText = document.querySelectorAll('.error-form--text');
  const isInvalidDate = previewDate.innerHTML === 'Invalid Date';
  errorSubText.forEach(doc => removeError(doc, [Title, Description, Author, Content]));
  document.querySelector('.from-correct').classList.remove('sended');

  if (isErrorText(Title) || isErrorText(Description) || isErrorText(Author) || isErrorText(Content) || isInvalidDate) {
    showError('Whoops! Some fields need your attention :o', [Title, Description, Author, Content]);
    errorSubText.forEach(doc => {
      doc.classList.add('open-error');
      removeError(doc, [Title, Description, Author, Content]);
    });
  } else if (mainImg.src === 'data:,' || authorImg.src === 'data:,'){
    showError('Whoops! Some fields need your attention :o', []);
  } else {
    document.querySelector('.form_errors').classList.remove('open-error');
    document.querySelector('.from-correct').classList.add('sended');
    console.log({
      'title': Title.value,
      'subtitle': Description.value,
      'author': Author.value,
      'main_img_url': mainImg.src,
      'author_url': authorImg.src,
      'date': previewDate.innerHTML,
      'button': false,
      'content': Content.value,
    });
  }
}

PublishDate.addEventListener('change', ChangePreview);
Author.addEventListener('keyup', ChangePreview);
Title.addEventListener('keyup', ChangePreview); 
Description.addEventListener('keyup', ChangePreview);
AuthorPhoto.addEventListener('change', ShowImages);
HeroImage.addEventListener('change', ShowImages);
HeroImageSec.addEventListener('change', ShowImages);
form.addEventListener('submit', checkInputs);
BtnsRemoveImgs.forEach(el => el.addEventListener('click', removeImages));
