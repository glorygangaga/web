import { showError, removeError } from './errors.js';

const form = document.forms.sendForm;
const { Title, Description, Author, AuthorPhoto, HeroImage, HeroImageSec, Content, PublishDate } = form;

const articleTitle = document.querySelector('.screen-text-title');
const articleSubtitle = document.querySelector('.screen-text-subtitle');
const previewTitle = document.querySelector('.post-preview__title');
const previewSubtitle = document.querySelector('.post-preview__subtitle');
const authorName = document.querySelector('.post-preview__author-text');
const previewDate = document.querySelector('.post-preview__author-date');

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
  document.querySelector('.account-first-name').innerHTML = document.querySelector('.get-elems').dataset.email.toUpperCase();
})();

function ChangePreview(e) {
  const value = e.target.value;
  switch (e.target.id) {
    case 'Title':
      articleTitle.innerHTML = value; previewTitle.innerHTML = value; break;
    case 'Description':
      articleSubtitle.innerHTML = value; previewSubtitle.innerHTML = value; break;
    case 'Author':
      authorName.innerHTML = value; break;
    case "PublishDate":
      previewDate.innerHTML = new Date(value).toLocaleDateString(); break;
  }
}

function changeImage(e, ImgNames, noneImgNames) {
  const AllNames = e.target.id === 'AuthorPhoto' ? ImgNames[0] : ImgNames[1]; 
  const AllNoneNames = e.target.id === 'AuthorPhoto' ? noneImgNames[0] : noneImgNames[1];
  AllNames.forEach(ImgName => {
    const Img = document.querySelector(ImgName);
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        Img.src = reader.result;
        Img.style.width = '100%';
        Img.style.height = '100%';
      }, false,
    );
    file && reader.readAsDataURL(file);
    if (AllNames.length <= 2) Img.style.borderRadius = '50%';
    else if (ImgName === '.HeroImage-output' || ImgName === '.HeroImage-output-sec') Img.style.borderRadius = '4px';
  });
  AllNoneNames.forEach(noneImgName => document.querySelector(noneImgName).style.display = 'none');
}

function AddingBtns(mainChange, additionalChange) {
  document.querySelectorAll(mainChange).forEach(el => el.style.display = 'none');
  document.querySelectorAll(additionalChange).forEach(el => el.style.display = 'flex');
}

function ShowImages(e) {
  const curId = e.target.id;
  if (curId === "AuthorPhoto") AddingBtns('.changeImg-author', '.author-upload');
  else if (curId === "HeroImage" || curId === 'HeroImageSec') AddingBtns('.changeImg', '.HeroImage-size');
  changeImage(e, ImgNames, noneImgNames);
}

function removeImages(e) {
  const classes = e.currentTarget.classList.value;
  ImgNames[Number(!classes.includes('changeImg-author__remove'))].forEach(el => {
    const curImg = document.querySelector(el);
    curImg.src = 'data:,';
    curImg.style.removeProperty("width");
    curImg.style.removeProperty("height");
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
  
  const errorSubText = document.querySelectorAll('.error-form--text');
  if (!Title.value.trim() || !Description.value.trim() || !Author.value.trim() || !Content.value.trim()) {
    showError('Whoops! Some fields need your attention :o', [Title, Description, Author, Content]);
    errorSubText.forEach(doc => {
      doc.classList.add('open-error');
      removeError(doc, [Title, Description, Author, Content]);
    })
  }
  const mainImg = document.querySelector(ImgNames[0][0]);
  const authorImg = document.querySelector(ImgNames[1][0]);
  if (mainImg.src === 'data:,' || authorImg.src === 'data:,'){
    errorSubText.forEach(doc => removeError(doc, [Title, Description, Author, Content]));
    showError('Whoops! Some fields need your attention :o', []);
  } else {
    document.querySelector('.form_errors').classList.remove('open-error');
    document.querySelector('.from-correct').classList.add('sended');
    errorSubText.forEach(doc => removeError(doc, [Title, Description, Author, Content]));
    console.log({
      'title': Title.value,
      'subtitle': Description.value,
      'author': Author.value,
      'main_img_url': HeroImage.value || HeroImageSec.value,
      'author_url': AuthorPhoto.value,
      'date': previewDate.innerHTML,
      'button': false,
      'content': Content.value,
    });
  }
}

PublishDate.addEventListener('change', ChangePreview);
Author.addEventListener(' ', ChangePreview);
Title.addEventListener('keyup', ChangePreview); 
Description.addEventListener('keyup', ChangePreview);
AuthorPhoto.addEventListener('change', ShowImages);
HeroImage.addEventListener('change', ShowImages);
HeroImageSec.addEventListener('change', ShowImages);
form.addEventListener('submit', checkInputs);
document.querySelectorAll('.changeImg-remove').forEach(el => el.addEventListener('click', removeImages));
